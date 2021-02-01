# Donate(typecho文章打赏插件)

解压放到usr/plugins目录下，后台启用即可
然后在主题下面post.php文件里的文章末尾添加如下代码
``` php
    <?php Typecho_Plugin::factory('rootvip.cn.Donate')->Donate(); ?>
```
![](https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181241.jpg)

插件配置如下：
![](https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181339.jpg)

效果：
![](https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181216.jpg)

# ImagePreview(typecho文章图片大图预览插件)
把ImagePreview放到usr/plugins目录下，后台启用即可
然后在主题下面post.php文件里的任意位置添加如下代码
```php
<?php Typecho_Plugin::factory('rootvip.cn.ImagePreview')->ImagePreview(); ?>
```
http://rootvip.cn/可看效果