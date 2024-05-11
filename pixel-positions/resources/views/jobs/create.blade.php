<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Web developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="$83,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Remote"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://openvoid.dev"/>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="web, php, laravel"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
