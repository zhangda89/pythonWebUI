<div class="container-fluid">
    <div class="row-fluid row-list-area">
        <div class='span3'>
            <?php require "left_nav.php";?>
        </div>
        <div class="span9">
            <ul class="breadcrumb">
                <li><a href="#">首页</a> <span class="divider">/</span></li>
                <li><a href="#">Library</a> <span class="divider">/</span></li>
                <li class="active">Data</li>
            </ul>
            <?php for($i=0;$i<=0;$i++):?>
            <section class='item'>
                <div class="page-header">
                    <h1><a target="_blank" href='#'>第<?php echo $i;?>篇文章：下载</a></h1>
                    <h4 class='demo-panel-title'>
                        <small class=''>作者：大漠</small>
                        <small class=''>|</small>
                        <small>日期：2013-06-07</small>
                        <small class=''>|</small>
                        <small>分类：<a target='_blank' href='#'>ios</a></small>
                        <small class=''>|</small>
                        <small>点击：47</small>
                    </h4>
                </div>
                <div class='lead'>
                    <p itemprop="description">关于显示和隐藏TabBar的方法，自己开始不是很懂，查找了很多的资料，在http://blog.csdn.net/riveram/article/details/7345577

    	
    		这里面，有这样的描述，里面是给了两个方法：
    	
    	
    		隐藏tabbar的方法：
    	
    	
    - (void)hideTabBar {
        if (self.tabBarController.tabBar.hidden == YES) {
            return;
        }
        UIView *contentView;
        if ( [[self.tabBarController.view.subviews objectAtIndex:0] isKi......</p>
                    <p class="lead">下载之前先检查一下是否准备好了一个代码编辑器(我们推荐使用 <a href="http://sublimetext.com/2">Sublime Text 2</a>) ，你是否已经掌握了足够的HTML和CSS知识以开展工作。这里我们不详述源码文件，但是它们可以随时被下载。在这里我们只着重介绍使用已经编译好的Bootstrap文件进行入门讲解。</p>
            </div>
                
                <div id="tagsinput_tagsinput" class="tagsshow">
                    <span>标签：</span>
                    <span class="label">
                        <span>Clean&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Fresh&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Unique asdas asdasd asdasd asdasda asd&nbsp;&nbsp;</span>
                    </span>
                </div>
            </section>
            <?php endfor;?>
        </div>
    </div>
</div>