<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>Livestream API for web developers - example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
  <script type="text/javascript">
    params = { AllowScriptAccess: 'always' };
    function livestreamPlayerCallback(event) {
      if (event == 'ready') {
	player = document.getElementById("livestreamPlayer");
      	player.setDevKey('YOUR DEVKEY');
      	player.load('livestreamapi43');	
      }
 
      log = document.getElementById('log');
      log.innerHTML = log.innerHTML + '<br/>' + event; 
    }
    swfobject.embedSWF("http://cdn.livestream.com/chromelessPlayer/v21/playerapi.swf",
      "livestreamPlayer", "400", "300", "9.0.0", "expressInstall.swf", null, params);
  </script>
</head>
<body>
  <div id="livestreamPlayer">
  <h1>This page requires flash</h1>
    <p><a href="http://www.adobe.com/go/getflashplayer">download flash</a></p>
  </div>
  <br/>
  <input type="button" value="play" onclick="player.startPlayback()"/>
  <input type="button" value="pause" onclick="player.stopPlayback()"/>
  <input type="button" value="vol +" onclick="player.volumeUp()"/>
  <input type="button" value="vol -" onclick="player.volumeDown()"/>
  <div id="log"></div>
</body>
</html>