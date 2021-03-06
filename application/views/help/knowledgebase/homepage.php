<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 知识库首页视图
 * @author Kaijia Feng <fengkaijia@gmail.com>
 * @copyright 2013 Kaijia Feng
 * @license Dual-licensed proprietary
 * @link http://iplacard.com/
 * @package iPlacard
 * @since 2.0
 */

$this->load->view('header');?>

<div class="page-header" style="border-bottom: none; padding-bottom: 0;">
	<div id="jumbotron-kb" class="jumbotron">
		<h1 style="font-size: 56px;">知识库</h1>
		<p>通过 iPlacard 知识库获取帮助与支持。知识库文章提供会议相关帮助信息。</p>
		<?php echo form_open('knowledgebase/search', array('method' => 'get'));?>
			<div class="input-group">
				<?php echo form_input(array(
					'name' => 'keyword',
					'value' => set_value('keyword'),
					'class' => 'form-control input-lg',
					'placeholder' => "从 {$count} 篇知识库文章中搜索"
				));?>
				<span class="input-group-btn">
					<?php echo form_button(array(
						'content' => icon('search', false),
						'type' => 'submit',
						'class' => 'btn btn-primary btn-lg',
						'onclick' => 'loader(this);'
					));?>
				</span>
			</div>
		<?php echo form_close();?>
	</div>
</div>

<?php $this->load->view('help/knowledgebase/footerbar');?>

<?php $this->load->view('footer');?>