<?php $this->need('header.php'); ?>
<div class="body-wrap">
<article id="post-douban-index-for-chrome" class="article article-type-post" itemscope itemprop="blogPost">
  <div class="article-meta">
    <a href="<?php $this->permalink() ?>" class="article-date">
      <time datetime="<?php $this->date('Y-m-d\TH:i:s.000\Z'); ?>" itemprop="datePublished"><?php $this->date('M j');?></time>
    </a>
  </div>
  <div class="article-inner">
    <input type="hidden" class="isFancy" />
    <header class="article-header">
      <h1 class="article-title" itemprop="name">
        <?php $this->title() ?>
      </h1>
    </header>
    <div class="article-entry" itemprop="articleBody">
      <?php $this->content(''); ?>
    </div>
    <footer class="article-footer">
    </footer>
  </div>
</article>

<?php if(!empty($this->options->jiathis)): ?>
<div class="share">
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_renren"></a>
	<a class="jiathis_button_xiaoyou"></a>
	<a href="http://www.jiathis.com/share?uid=<?php echo $this->options->jiathis;?>" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript">
var jiathis_config = {data_track_clickback:'true'};
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=<?php echo $this->options->jiathis;?>" charset="utf-8"></script>
<!-- JiaThis Button END -->
</div>
<?php endif; ?>

<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
