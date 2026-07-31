<x-mail::message>
# New Course Enquiry

A new course enquiry has been received for the **Behavioural Wellbeing Masterclass**.

### Student Details
- **Name:** {{ $registration->name }}
- **Email:** {{ $registration->email }}
- **WhatsApp Mobile:** {{ $registration->phone }}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
