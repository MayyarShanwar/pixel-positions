<x-layout>
    <h1 class="flex justify-center text-4xl">Register</h1>
    <x-forms.form method='POST' action='/register' enctype='multipart/form-data'>
        <x-forms.input label='Name' name='name' />
        <x-forms.input label='Email' name='email' type='email' />
        <x-forms.input label='Password' name='password' type='password' />
        <x-forms.input label='Password Confirmation' name='password_confirmation' type='password' />

        <x-forms.divider></x-forms.divider>

        <x-forms.input label='Employer Name' name='employer' />
        <x-forms.input label='Employer Logo' name='logo' type='file' />

        <x-forms.button>Create New Account</x-forms.button>
    </x-forms.form>
</x-layout>