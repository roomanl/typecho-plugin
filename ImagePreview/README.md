# ImagePreview(typecho文章图片大图预览插件)
把ImagePreview放到usr/plugins目录下，后台启用即可
然后在主题下面post.php文件里的任意位置添加如下代码
```php
<?php Typecho_Plugin::factory('rootvip.cn.ImagePreview')->ImagePreview(); ?>
```
http://rootvip.cn/ 可看效果