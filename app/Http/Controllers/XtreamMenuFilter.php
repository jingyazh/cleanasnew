<?php

namespace App\Http\Controllers;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

use App\User;
use Auth;

class XtreamMenuFilter implements FilterInterface
{
    public function transform($item)
    {
        $curuser =  Auth::user(); 
        $rolestrArr = array("MASTER", "SUPER", "RESELLER");
        $rolestr = $rolestrArr[$curuser->roleno];

        if(isset($item['header']) && $item['header']=="___Panel"){
            $item['header'] =__("WELCOME")."! ".__($rolestr)." ".__("PANEL");
            // $item['header'] ="Welcome to Order Panel";

        }
        if(isset($item['text']) && $item['text']=="___Reseller"){
            $item['text'] = $curuser->name." ( Id: {$curuser->username} )";

        }        
        // if(isset($item['text']) && $item['text']=="___TicketInbox"){
        //     $item['text'] = "Ticket Inbox";
        //     /* 'label' => 4, */
        //     if($curuser ->newinboxcount() > 0){
        //         $item['label'] = $curuser ->newinboxcount();

        //     }

        // }   
        //... translate for multilang
        if (isset($item['text'])) {
            $item['text'] = __($item['text']);
        }
        if (isset($item['header'])) {
            $item['header'] = __($item['header']);
        }                
        if (isset($item['header'])) {
            $item['header'] = __($item['header']);
        }   

        if(isset($item['notrole']) && ($item['notrole'] === $curuser->roleno)){
            return false;
        }
        if(isset($item['canrole']) && ($item['canrole'] !== $curuser->roleno)){
            return false;
        }



        return $item;
    }
}

?>