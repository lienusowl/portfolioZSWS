<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>


<script type="text/javascript">
  VK.init({apiId: 4648695, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div class="comments">
<div id="vk_comments"></div>
</div>
<img src="img/snowman.jpg" class="snowman">
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "520", attach: "*"});
</script>