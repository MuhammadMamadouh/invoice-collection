    <!--scirpt Files-->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>
    <script src="{{ asset('assets/js/all.min.js')}}"></script>
    <script src="{{ asset('assets/js/help.js')}}"></script>
    <script src="{{ asset('assets/js/searchBar.js')}}"></script>
    <script src="{{ asset('assets/js/validation.js')}}"></script>
    <script src="{{ asset('assets/js/popper.js')}}"></script>
    <script src="{{ asset('assets/js/manage.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/hovers.js')}}"></script>
    <script src="{{ asset('assets/js/demo.js')}}"></script>
    <script src="{{ asset('assets/js/email.js')}}"></script>
    <script src="{{ asset('assets/js/chart.js')}}"></script>
    <script src="{{ asset('assets/js/chrtslines.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
   <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script>
   <script src="{{ asset('assets/js/js/chart-9.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>
  <script>
      // Initialize OverlayScrollbars on the table
      OverlayScrollbars(document.querySelectorAll('#table-scroll'), { });
  </script>
    <script>
      function setFlag() {
    localStorage.setItem('triggerButtonClick', 'true');
}
  </script>
             <script>
                                                                    document.getElementById('flag').addEventListener('click', function() {
                                    document.getElementById('colorPicker').click();
                                });

                                document.getElementById('colorPicker').addEventListener('input', function() {
                                    const color = this.value;
                                    document.getElementById('colorHex').textContent = color;
                                    document.getElementById('colorDisplay').style.backgroundColor = color;
                                });
                                  </script>
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
</body>

</html>