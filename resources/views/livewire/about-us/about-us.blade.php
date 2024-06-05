@section('title') درباره ما @endsection
@section("keywords")
    <meta name="keywords" content="طراحی وب سایت, کد نویسی, وب سایت شخصی, وب سایت فروشگاهی, وب سایت شرکتی, وب اپلیکیشن, اپلیکیشن موبایل, ساخت اپلیکیشن اندرویدی, ساخت اپلیکیشن برای IOS, دیجیتال مارکتینگ, استارت اپ, استارت اپ کانادا">
@endsection

<div>
    @includeIf('livewire.about-us.components.hero')
    @includeIf('livewire.about-us.components.services')
    @includeIf('livewire.about-us.components.our-team')
    @includeIf('livewire.about-us.components.about-us-form')
</div>
