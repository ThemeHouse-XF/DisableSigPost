<?php

class ThemeHouse_DisableSigPost_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/DisableSigPost/Extend/XenForo/ControllerPublic/Forum.php' => '3e0507926263d15ec749db0806fda184',
                'library/ThemeHouse/DisableSigPost/Extend/XenForo/ControllerPublic/Post.php' => '8ac72aa2970b25eb376f82fc47adb99f',
                'library/ThemeHouse/DisableSigPost/Extend/XenForo/ControllerPublic/Thread.php' => '8570314bf8d36de8d2cd8f60df0273b8',
                'library/ThemeHouse/DisableSigPost/Extend/XenForo/DataWriter/DiscussionMessage/Post.php' => '65b6078179d22200ff203ab06b07e01c',
                'library/ThemeHouse/DisableSigPost/Install/Controller.php' => '8ec945088a004236d8391d04eb60265b',
                'library/ThemeHouse/DisableSigPost/Listener/LoadClass.php' => '970940628a170b3752923063e13b67e9',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}