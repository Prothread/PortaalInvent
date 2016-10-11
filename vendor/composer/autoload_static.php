<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0a55957efdf0e279fcd6092060aa6da
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProjectRoot\\' => 12,
        ),
        'N' => 
        array (
            'NamspaceInSourceDir\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProjectRoot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'NamspaceInSourceDir\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Block' => __DIR__ . '/../..' . '/app/Model/Block.php',
        'BlockController' => __DIR__ . '/../..' . '/app/Controller/BlockController.php',
        'Database' => __DIR__ . '/../..' . '/app/Model/Database.php',
        'DbBlock' => __DIR__ . '/../..' . '/app/Model/DbBlock.php',
        'DbImage' => __DIR__ . '/../..' . '/app/Model/DbImage.php',
        'DbMail' => __DIR__ . '/../..' . '/app/Model/DbMail.php',
        'DbVerify' => __DIR__ . '/../..' . '/app/Model/DbVerify.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'ImageController' => __DIR__ . '/../..' . '/app/Controller/ImageController.php',
        'ImageModel' => __DIR__ . '/../..' . '/app/Model/ImageModel.php',
        'Mail' => __DIR__ . '/../..' . '/app/Model/Mail.php',
        'MailController' => __DIR__ . '/../..' . '/app/Controller/MailController.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Session' => __DIR__ . '/../..' . '/app/session/Session.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0a55957efdf0e279fcd6092060aa6da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0a55957efdf0e279fcd6092060aa6da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0a55957efdf0e279fcd6092060aa6da::$classMap;

        }, null, ClassLoader::class);
    }
}