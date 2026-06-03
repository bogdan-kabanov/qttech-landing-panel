@extends('app')

@section('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        bodyTemplate = document.getElementById('body-template');
        bodyTemplate.innerHTML = '';
        database.collection('settings').doc('landingPageTemplate').get().then(async function (snapshots) {
            var data = snapshots.data();
            if (data && data.landingPageTemplate) {
                bodyTemplate.innerHTML = data.landingPageTemplate;
            }
        });
    });

</script>

@endsection
