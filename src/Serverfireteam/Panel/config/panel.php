<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return array(

    'panelControllers' => array(
        'Admin',
        'Permission',
        'Role',
        'Link'
    ),
    'logo' => 'packages/serverfireteam/panel/img/logo.png', // logo of Panel

    /*
     * Specify a custom model namespace to CRUD a model that
     * is not found directly in your project, or in
     * a different namespace than the default.
     * This is done on a per-model basis
     */
    'customModelNamespaces' => array(
        // 'Model' => '\\Vendor\\Project\\Models\\'
    ),
    /*
     * Specify an override default model namespace to change
     * the default namespace Panel will resolve models.
     */
    'overrideDefaultModelNamespace' => '' // '\\App\\Models\\'
);
    
    

