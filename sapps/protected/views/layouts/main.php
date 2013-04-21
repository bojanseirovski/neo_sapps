<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//raw.github.com/dinbror/bpopup/master/jquery.bpopup.min.js"></script>
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/pirulen.css" media="print" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-jvectormap-1.2.2.css" />
        
        <?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/js/actions.js'); ?>
        <?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/js/login-box.js'); ?>
        <?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/js/jquery-jvectormap-1.2.2.min.js'); ?>
        <?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/js/jquery-jvectormap-world-mill-en.js'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body <?php echo ($this->action->Id!='contact')?'class=" white"':''; ?> >
        <?php 
        
        $login_out_text ='Sign In';
        $login_out_link = Yii::app()->request->baseUrl.'/index.php?r=site/login';
        if(!Yii::app()->user->isGuest){
            $login_out_text ='Sign out('.Yii::app()->user->name.')';
            $login_out_link = Yii::app()->request->baseUrl.'/index.php?r=site/logout';    
        }
?>
        <header>
	<section class="wrap">
        	<img class="logo-image" src="images/sapps-logo-gray.png" alt="nasa logo" /><h1> NEO for everyone<span class="yellow"> NASA</span> Spaceapps Challenge</h1>
            <nav id="user-nav"><ul><li><?php if(Yii::app()->user->isGuest){ ?><a class="btn" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=users/create">Register</a><?php } ?></li><li><a class="btn btn-success" href="<?php echo $login_out_link;?>"><?php echo $login_out_text;?></a></li></ul></nav>
        </section>
    </header>
    
    <section id="main-nav">
        <section class="wrap">
            <nav>
                     <?php
                    $menu_items = array('items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Findings', 'url' => array('/findings/index')),
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Account', 'url' => array('/users/view&id=' . Yii::app()->session['user']['id']), 'visible' => !Yii::app()->user->isGuest),
                    ),
                );

                if (Yii::app()->user->name == 'admin@admin.com') {
                    $menu_items['items'][] = array('label' => 'Users', 'url' => array('/users/index'));
                }
                $this->widget('zii.widgets.CMenu', $menu_items);
                ?>
            </nav>
        </section>    
    </section>
    
        
        <?php echo $content; ?>        
	
        
    
        <form class="form-signin" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/login" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" name="LoginForm[username]" class="input-block-level" placeholder="Email address">
                <input type="password" name="LoginForm[password]" class="input-block-level" placeholder="Password">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me" name="LoginForm[rememberMe]"> Remember me
                </label>
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>

    </body>
</html>
