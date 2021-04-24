<!doctype html>
<meta charset='utf-8'>
<link href='css/dragula.css' rel='stylesheet' type='text/css' />
<link href='css/example.css' rel='stylesheet' type='text/css' />
<title>dragula</title>

<div class='examples'>
  <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=githubcombevacqua" id="_carbonads_js"></script>
  <div class='parent'>
    <label for='hy'>Move stuff between these two containers. Note how the stuff gets inserted near the mouse pointer? Great stuff.</label>
    <div class='wrapper'>
      <div id='left-defaults' class='container'>
        <div>You can move these elements between these two containers</div>
        <div>Moving them anywhere else isn't quite possible</div>
      </div>
      <div id='right-defaults' class='container'>
        <div>There's also the possibility of moving elements around in the same container, changing their position</div>
        <div>This is the default use case. You only need to specify the containers you want to use</div>
        <div>More interactive use cases lie ahead</div>
        <div>Moving <code>&lt;input/&gt;</code> elements works just fine. You can still focus them, too. <input placeholder='See?' /></div>
        <div>Make sure to check out the <a href='https://github.com/bevacqua/dragula#readme'>documentation on GitHub!</a></div>
      </div>
    </div>
    <pre>
      <code>
dragula([document.getElementById(left), document.getElementById(right)]);
      </code>
    </pre>
  </div>



</div>
<script src='../js/dragula.js'></script>
<script src='../js/example.min.js'></script>
