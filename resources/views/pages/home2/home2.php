<?php

use App\Mail\ClassRegistered;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('components.layouts.app')] class extends Component
{
    #[Validate('required|string|min:3', message: 'Please enter your full name.')]
    public string $name = '';

    #[Validate('required|email', message: 'Please enter a valid email address.')]
    public string $email = '';

    #[Validate('required|string|min:10', message: 'Please enter a valid phone number (at least 10 digits).')]
    public string $phone = '';

    public bool $success = false;

    public int $price = 299;

    /** @var array<int, array{name: string, city: string, time_ago: string, minutes: int}> */
    public array $purchasers = [];

    /**
     * Mount the component and generate Indian purchasers list.
     */
    public function mount(): void
    {
        $firstNames = ['Amit', 'Rahul', 'Sneha', 'Priya', 'Vikram', 'Rohan', 'Ananya', 'Divya', 'Sandeep', 'Neha', 'Karthik', 'Sanjay', 'Pooja', 'Aarav', 'Ishaan', 'Aditya', 'Meera', 'Riya', 'Arjun', 'Kabir', 'Tanvi', 'Abhishek', 'Deepak', 'Manish', 'Jyoti', 'Shalini', 'Sunita', 'Rajesh', 'Vijay', 'Harish', 'Karan', 'Simran', 'Akash', 'Shruti', 'Varun', 'Nisha', 'Aman', 'Kriti', 'Pranav', 'Payal', 'Aditi', 'Rohan', 'Rakesh', 'Suresh', 'Geeta', 'Anil', 'Sunil', 'Kiran', 'Lata', 'Usha'];
        $lastNames = ['Sharma', 'Kumar', 'Patel', 'Malhotra', 'Iyer', 'Reddy', 'Sen', 'Joshi', 'Gupta', 'Nair', 'Subramanian', 'Deshmukh', 'Mishra', 'Verma', 'Saxena', 'Choudhury', 'Mehta', 'Rao', 'Singh', 'Bose', 'Gill', 'Jadhav', 'Kulkarni', 'Pillai', 'Acharya', 'Trivedi', 'Jha', 'Pandey', 'Roy', 'Prasad', 'Kapoor', 'Khanna', 'Joshi', 'Bhat', 'Bhasin', 'Dutta', 'Das', 'Dhar', 'Menon', 'Shetty', 'Hegde', 'Nayak', 'Sawant', 'Sane', 'Wagle'];
        $cities = ['Mumbai', 'Delhi', 'Bangalore', 'Pune', 'Hyderabad', 'Chennai', 'Kolkata', 'Ahmedabad', 'Jaipur', 'Kochi', 'Nagpur', 'Lucknow', 'Indore', 'Bhopal', 'Chandigarh', 'Surat', 'Coimbatore', 'Patna', 'Ranchi', 'Guwahati', 'Visakhapatnam', 'Mysore', 'Nashik', 'Vadodara', 'Kanpur'];

        $used = [];
        $purchaserList = [];

        srand(43);

        while (count($purchaserList) < 200) {
            $first = $firstNames[array_rand($firstNames)];
            $last = $lastNames[array_rand($lastNames)];
            $city = $cities[array_rand($cities)];
            $name = "$first $last";

            $key = "$name|$city";
            if (in_array($key, $used)) {
                continue;
            }
            $used[] = $key;

            $minutesAgo = rand(1, 1440);
            if ($minutesAgo < 60) {
                $timeAgo = "$minutesAgo mins ago";
            } else {
                $hours = (int) floor($minutesAgo / 60);
                if ($hours === 1) {
                    $timeAgo = '1 hour ago';
                } else {
                    $timeAgo = "$hours hours ago";
                }
            }

            $purchaserList[] = [
                'name' => $name,
                'city' => $city,
                'time_ago' => $timeAgo,
                'minutes' => $minutesAgo,
            ];
        }

        usort($purchaserList, function (array $a, array $b): int {
            return $a['minutes'] <=> $b['minutes'];
        });

        $this->purchasers = $purchaserList;
    }
    public function submit(): void
    {
        $this->validate();

        $registration = Registration::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'price' => $this->price,
        ]);

        try {
            Mail::to('samcool3203@gmail.com')->send(new ClassRegistered($registration));
        } catch (Exception $e) {
            logger()->error('Mail sending failed in home2: '.$e->getMessage());
        }

        $this->success = true;

        $this->redirect('https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing');
    }

    /**
     * Reset the form and success state.
     */
    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'phone', 'success']);
    }
};
