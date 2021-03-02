<!-- BEGIN: Vendor JS-->
<script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
@stack('vendor_js')
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
@stack('page_vendor_js')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('assets/app-assets/js/scripts/components.js')}}"></script>
@stack('theme_js')
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
@stack('page_js')
<!-- END: Page JS-->

<script type="text/javascript">      
    window.csrf_token = "{{ csrf_token() }}"
  </script>

<!-- BEGIN: Custom js-->
@stack('custom_js')
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<!-- END: Custom js-->