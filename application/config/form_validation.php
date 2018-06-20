<?php
 $config=[

 	        'add_article_rules'=> [
                                     [
           	                           'field'=>'title',
           	                            'lable'=>'Title',
           	                           'rules'=>'required'
                                      ],
                                     [
                                     	'field'=>'body',
                                     	'lable'=>'Artcle Body',
                                     	'rules'=>'required'
                                     ],
                                      [
                                      'field'=>'image',
                                      'lable'=>'Artcle Image',
                                      'rules'=>'required'
                                     ],
                                      [
                                      'field'=>'date',
                                      'lable'=>'Artcle Date',
                                      'rules'=>'required'
                                     ],
                                      [
                                      'field'=>'tag',
                                      'lable'=>'Artcle Tag',
                                      'rules'=>'required'
                                     ]
 	                               ]
          
         ];
?>