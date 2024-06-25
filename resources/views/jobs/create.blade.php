<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="10000" />
        <x-forms.input label="Location" name="location" placeholder="Georgia, Tbilisi" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="example.com"/>

        <x-forms.checkbox label="Feature" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags" name="tags" placeholder="frontend, ai, laravel"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
