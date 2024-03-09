<?php

if (!defined('__TYPECHO_ROOT_DIR__'))
    exit;

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $this->options->title ?>
    </title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/viewer.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('uno.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/fancybox.css'); ?>">
    <link rel="shortcut icon" href="https://s2.loli.net/2024/03/04/rgzZUlFS19iucae.png" title="Favicon">
    <style>
        <?php echo $this->options->css; ?>
    </style>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/axios.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/viewer.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/scrollload.min.js'); ?>"></script>
    <script defer src="<?php $this->options->themeUrl('assets/alpine.3.13.3.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/icefox.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/fancybox.umd.js'); ?>"></script>
    <script type="text/javascript">
        <?php echo $this->options->script; ?>
    </script>
    <script defer src="https://visitor.togu.top/cc79fb86-e8d1-4644-0373-2ae1e89031fa" data-website-id="ce09f0ee-c474-4b53-b48a-6a3156b99753"></script>
</head>

<body :class="{'dark':darkMode}" x-data="{darkMode:false}">
    <div class="bg-[#f0f0f0] dark:bg-[#262626]">