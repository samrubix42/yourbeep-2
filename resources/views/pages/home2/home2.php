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

    public int $price = 9;

    /** @var array<int, array{name: string, city: string, time_ago: string, minutes: int}> */
    public array $purchasers = [];

    /**
     * Mount the component and generate US purchasers list.
     */
    public function mount(): void
    {
        $firstNames = ['James', 'John', 'Robert', 'Michael', 'William', 'David', 'Richard', 'Joseph', 'Thomas', 'Charles', 'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Mark', 'Steven', 'Paul', 'Andrew', 'Joshua', 'Kenneth', 'Kevin', 'Brian', 'George', 'Timothy', 'Ronald', 'Edward', 'Jason', 'Jeffrey', 'Ryan', 'Jacob', 'Gary', 'Nicholas', 'Eric', 'Jonathan', 'Stephen', 'Larry', 'Justin', 'Scott', 'Brandon', 'Benjamin', 'Samuel', 'Gregory', 'Frank', 'Alexander', 'Patrick', 'Raymond', 'Jack', 'Mary', 'Jennifer', 'Linda', 'Patricia', 'Elizabeth', 'Susan', 'Jessica', 'Sarah', 'Karen', 'Lisa', 'Nancy', 'Sandra', 'Ashley', 'Emily', 'Kimberly', 'Margaret', 'Donna', 'Michelle', 'Carol', 'Amanda', 'Melissa', 'Deborah', 'Stephanie', 'Rebecca', 'Laura', 'Sharon', 'Cynthia', 'Kathleen', 'Amy', 'Angela', 'Shirley', 'Anna', 'Brenda', 'Pamela', 'Emma', 'Nicole', 'Samantha', 'Rachel', 'Lauren', 'Megan', 'Kayla', 'Jordan', 'Tyler', 'Caleb', 'Natalie', 'Haley'];
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson', 'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin', 'Lee', 'Perez', 'Thompson', 'White', 'Harris', 'Sanchez', 'Clark', 'Ramirez', 'Lewis', 'Robinson', 'Walker', 'Young', 'Allen', 'King', 'Wright', 'Scott', 'Torres', 'Nguyen', 'Hill', 'Green', 'Adams', 'Baker', 'Nelson', 'Carter', 'Mitchell'];
        $cities = ['New York, NY', 'Los Angeles, CA', 'Chicago, IL', 'Houston, TX', 'Phoenix, AZ', 'Philadelphia, PA', 'San Antonio, TX', 'San Diego, CA', 'Dallas, TX', 'San Jose, CA', 'Austin, TX', 'Jacksonville, FL', 'Fort Worth, TX', 'Columbus, OH', 'Charlotte, NC', 'San Francisco, CA', 'Indianapolis, IN', 'Seattle, WA', 'Denver, CO', 'Washington, DC', 'Boston, MA', 'Nashville, TN', 'Portland, OR', 'Las Vegas, NV', 'Detroit, MI', 'Miami, FL', 'Atlanta, GA', 'Minneapolis, MN', 'New Orleans, LA', 'Savannah, GA', 'Boulder, CO', 'Boise, ID', 'Tucson, AZ', 'Salt Lake City, UT', 'Milwaukee, WI', 'Kansas City, MO', 'Sacramento, CA', 'Cleveland, OH', 'Tampa, FL', 'Omaha, NE', 'Raleigh, NC', 'Louisville, KY', 'Memphis, TN', 'Pittsburgh, PA', 'St. Louis, MO'];

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
            Mail::to('yourbeep2026@gmail.com')
                ->cc(['techonikasolutions@gmail.com', 'alolika.savant@gmail.com'])
                ->send(new ClassRegistered($registration));
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
