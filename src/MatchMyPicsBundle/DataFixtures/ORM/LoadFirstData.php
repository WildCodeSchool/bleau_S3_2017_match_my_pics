<?php

namespace MatchMyPicsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use MatchMyPicsBundle\Entity\Photo;
use Doctrine\Common\Persistence\ObjectManager;
use MatchMyPicsBundle\Entity\Team;


class LoadPictureTeam implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $picsTeam = array(
            array(
                "picture" => "https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiuk8eBp73TAhUMWRoKHeMiDJIQjRwIBw&url=http%3A%2F%2Fblackpizza.com%2F2013%2F03%2F27%2Fzoo-portraits-by-yago-partal%2F&psig=AFQjCNGwuiUhS0Q2ue57ut_8Q6yWwLoTLQ&ust=1493130565122695",
                "alt" => "Team Cerf à la mode"
            ),

            array(
                "picture" => "https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiDpKL_p73TAhULvBoKHYbIAZYQjRwIBw&url=http%3A%2F%2Fwww.grand-dictonnaire.com%2Fsombrero.html&psig=AFQjCNG1IFZYHXa57qT8j8JRSdZPZIcVyg&ust=1493130827494624",
                "alt" => "Team Sombrero"
            ),

            array(
                "picture" => "https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjFzb2YqL3TAhWCOxoKHUZJCeIQjRwIBw&url=https%3A%2F%2Fwww.decathlon.be%2FC-1185622-fit-ball&psig=AFQjCNETs3UWsT8MqLBqJyIrJk_D_VGsOQ&ust=1493130885997620",
                "alt" => "Team Fitball"
            ),

            array(
                "picture" => "https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwj7guqrqL3TAhXFPBoKHbRzA5QQjRwIBw&url=https%3A%2F%2Ffr.pinterest.com%2Fpin%2F767230486488579092%2F&psig=AFQjCNHzRmHRq32gIwj4DxsXu-6mOUqnSA&ust=1493130936535714",
                "alt" => "Team Licorne"
            ),

            array(
                "picture" => "https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjv_6r3sL3TAhVHuhoKHc6jApQQjRwIBw&url=http%3A%2F%2Fwww.lefigaro.fr%2Fcinema%2F2016%2F12%2F12%2F03002-20161212ARTFIG00232-star-wars-dark-vador-figure-incontournable-de-la-pop-culture.php&psig=AFQjCNEzwfZOpusHWH7kzQJT-SIVsKJJZA&ust=1493133245206671",
                "alt" => "GameMaster"
            )
        );

        foreach ($picsTeam as $pic){
            $picId = new Photo();
            $picId->setSources($pic['picture']);
            $picId->setAlt($pic['alt']);
            $manager->persist($picId);
        }


        $UserAdmin = new Team();
        $UserAdmin->setUsername("SuperAdmin3000");
        $UserAdmin->setEmail("admin@gmail.com");
        $UserAdmin->setPassword("verysuperadmin");
        $UserAdmin->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($UserAdmin);

        $manager->flush();

    }
}