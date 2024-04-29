<button data-sitekey="{{ config('recaptcha.api_site_key') }}"
        data-callback='onSubmit'
        data-action='{{ $action }}'
        {{ $attributes->merge(['class' => 'g-recaptcha']) }}
>
    {{ $slot }}
</button>
@section('javascript')
    <script>
        let form = document.getElementById("{{ $formId }}");
        function onSubmit(token) {
            // Check form validity and submit if valid
            if(form.checkValidity()){
                form.submit();
            } else {
                // If not valid, create a temporary submit button to trigger form validation
                // Create the temporary button, click and remove it
                let tmpSubmit = document.createElement('button')
                form.appendChild(tmpSubmit)
                tmpSubmit.click()
                form.removeChild(tmpSubmit)
            }
        }
    </script>
@endsection
