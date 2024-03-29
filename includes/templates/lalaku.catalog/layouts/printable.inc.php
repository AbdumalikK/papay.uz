<!DOCTYPE html>
<html lang="{snippet:language}" dir="{snippet:text_direction}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<link rel="stylesheet" href="{snippet:template_path}css/framework.css" />
<link rel="stylesheet" href="{snippet:template_path}css/printable.css" />

{snippet:head_tags}
{snippet:style}
</head>
<body>

<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<button name="print" class="btn btn-default"><?php echo functions::draw_fonticon('fa-print'); ?> <?php echo language::translate('title_print', 'Print'); ?></button>
<?php } ?>

{snippet:content}

{snippet:foot_tags}
{snippet:javascript}

<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<script>
  $('button[name="print"]').click(function(){
    window.print();
  });
</script>
<?php } ?>
</body>
</html>