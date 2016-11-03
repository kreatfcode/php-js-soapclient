<html>
  <head>
    <title>DJBC ESB TESTER</title>
  </head>
  <body>
    <div>
      Cek Service Status : <span id="status"></span>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="jquery.soap.js"></script>
    <script>
      $( document ).ready(function() {
    console.log( "ready!" );
        $("#status").text("Create Connection....");
        $.soap({
    url: 'https://esbbcext01.beacukai.go.id:9082/penerimaandatasvc/WSTPB/',
    method: 'getKurs',

    data: {
        kodeValuta: 'USD',
        tglValuta: '2016-11-02'
    },

    success: function (soapResponse) {
        // do stuff with soapResponse
        // if you want to have the response as JSON use soapResponse.toJSON();
        // or soapResponse.toString() to get XML string
        // or soapResponse.toXML() to get XML DOM
      console.log('success');
      console.log(soapResponse);
    },
    error: function (SOAPResponse) {
        // show error
      console.log('error');
      console.log(SOAPResponse);
      $("#status").text("FAILED");
    }
});
});
      
    </script>
  </body>
</html>
