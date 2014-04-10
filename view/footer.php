    </div><!-- /container -->
    </div><!-- /container -->
    </div><!-- /container -->
     <!-- Footer
      ================================================== -->
      

 <div id="push"></div>
</div><!-- /wrap -->
      <footer id="footer">
    <div class="container">
    <hr>
        <p class="pull-right"><a href="#">Back to top</a></p>
        Made by <a target="_blank" href="#" onclick="pageTracker._link(this.href); return false;">yitian zhang mingwei lin</a><br/>
      </div><!-- /container -->
      </footer>


    <script>
    $(document).ready(function() {
      $('a[rel="tooltip"]').tooltip({trigger:'hover', placement:'top', html:'true'});
      function updateTime(){
        var currentTime = new Date()
        var minutes = 60 - currentTime.getMinutes();
        if (minutes < 10 && minutes > 1){
          minutes = "<font class=\"error\">0" + minutes + " minutes</font>"
        } else if ( minutes == 1 ) {
          minutes = 60 - currentTime.getSeconds();
          minutes = "<font class=\"error\">" + minutes + " seconds</font>"
        } else {
          minutes = "<font class=\"error\">" + minutes + " minutes</font>"
        }
        document.getElementById('time_span').innerHTML = minutes;
      }
      setInterval(updateTime, 1000);
      });
  </script>
  </body>
</html>
