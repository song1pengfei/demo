<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8"/>
  </head>
  <body>
		  <form method="post" action="<?php echo e(URL('gao')); ?>">
		  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		  <input type="text" name="phone"/>
		  <input type="submit" value="短信"/>
		  </form>
  </body>
</html>