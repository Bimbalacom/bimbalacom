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
            if(form.checkValidity()){
                form.submit();
            } else {
                // Create the temporary button, click and remove it
                let tmpSubmit = document.createElement('button')
                form.appendChild(tmpSubmit)
                tmpSubmit.click()
                form.removeChild(tmpSubmit)
            }
        }
    </script>
@endsection
