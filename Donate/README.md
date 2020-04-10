# Donate(typecho文章打赏插件)

解压放到usr/plugins目录下，后台启用即可
然后在主题下面post.php文件里的文章末尾添加如下代码
``` php
    <?php Typecho_Plugin::factory('rootvip.cn.Donate')->Donate(); ?>
```
![请输入图片描述][2]

插件配置如下：
![请输入图片描述][3]

效果：
![请输入图片描述][4]

  [1]: https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/Donate.zip
  [2]: https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181241.jpg
  [3]: https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181339.jpg
  [4]: https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/TIM%E6%88%AA%E5%9B%BE20200403181216.jpg