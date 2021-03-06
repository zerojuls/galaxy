<?php

use yii\db\Schema;
use yii\db\Migration;

class m150624_084848_auth_v0_1_0 extends Migration
{
    public function up()
    {

        $this->batchInsert('{{%auth_item}}', ['name', 'type', 'description', 'rule_name', 'data', 'created_at', 'updated_at'],
            [
                ['Administrator', 1, '', NULL, NULL, 1432554006, 1432554059],
                ['Customer', 1, NULL, NULL, NULL, 1432639084, 1432639084],
                ['Merchant', 1, '', NULL, NULL, 1432554082, 1432554082],
                ['star\\account\\controllers\\core\\AccountController_Delete', 2, NULL, NULL, NULL, 1436168818, 1436168818],
                ['star\\account\\controllers\\core\\AccountController_Update', 2, NULL, NULL, NULL, 1436168818, 1436168818],
                ['star\\account\\controllers\\core\\AccountController_View', 2, NULL, NULL, NULL, 1436168818, 1436168818],
                ['star\\account\\controllers\\core\\AccountController_WithdrawalIndex', 2, NULL, NULL, NULL, 1436168818, 1436168818],
                ['star\\account\\controllers\\core\\ActivityController_Create', 2, NULL, NULL, NULL, 1436168825, 1436168825],
                ['star\\account\\controllers\\core\\ActivityController_Delete', 2, NULL, NULL, NULL, 1436168825, 1436168825],
                ['star\\account\\controllers\\core\\ActivityController_Index', 2, NULL, NULL, NULL, 1436168825, 1436168825],
                ['star\\account\\controllers\\core\\ActivityController_Update', 2, NULL, NULL, NULL, 1436168825, 1436168825],
                ['star\\account\\controllers\\core\\ActivityController_View', 2, NULL, NULL, NULL, 1436168825, 1436168825],
                ['star\\account\\controllers\\core\\RechargeController_Create', 2, NULL, NULL, NULL, 1436168832, 1436168832],
                ['star\\account\\controllers\\core\\RechargeController_Delete', 2, NULL, NULL, NULL, 1436168832, 1436168832],
                ['star\\account\\controllers\\core\\RechargeController_Index', 2, NULL, NULL, NULL, 1436168832, 1436168832],
                ['star\\account\\controllers\\core\\RechargeController_Update', 2, NULL, NULL, NULL, 1436168832, 1436168832],
                ['star\\account\\controllers\\core\\RechargeController_View', 2, NULL, NULL, NULL, 1436168832, 1436168832],
                ['star\\auth\\controllers\\AuthController_Create', 2, NULL, NULL, NULL, 1432884200, 1432884200],
                ['star\\auth\\controllers\\AuthController_ListRole', 2, NULL, NULL, NULL, 1432884200, 1432884200],
                ['star\\auth\\controllers\\AuthController_Update', 2, NULL, NULL, NULL, 1432884200, 1432884200],
                ['star\\blog\\controllers\\core\\CommentController_Create', 2, NULL, NULL, NULL, 1436168852, 1436168852],
                ['star\\blog\\controllers\\core\\CommentController_Delete', 2, NULL, NULL, NULL, 1436168852, 1436168852],
                ['star\\blog\\controllers\\core\\CommentController_Index', 2, NULL, NULL, NULL, 1436168852, 1436168852],
                ['star\\blog\\controllers\\core\\CommentController_Update', 2, NULL, NULL, NULL, 1436168852, 1436168852],
                ['star\\blog\\controllers\\core\\CommentController_View', 2, NULL, NULL, NULL, 1436168852, 1436168852],
                ['star\\blog\\controllers\\core\\PostController_Create', 2, NULL, NULL, NULL, 1436168858, 1436168858],
                ['star\\blog\\controllers\\core\\PostController_Delete', 2, NULL, NULL, NULL, 1436168858, 1436168858],
                ['star\\blog\\controllers\\core\\PostController_Index', 2, NULL, NULL, NULL, 1436168858, 1436168858],
                ['star\\blog\\controllers\\core\\PostController_Update', 2, NULL, NULL, NULL, 1436168858, 1436168858],
                ['star\\blog\\controllers\\core\\PostController_View', 2, NULL, NULL, NULL, 1436168858, 1436168858],
                ['star\\catalog\\controllers\\core\\DefaultController_Index', 2, NULL, NULL, NULL, 1432884014, 1432884014],
                ['star\\catalog\\controllers\\core\\ItemController_AjaxSkus', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_Bulk', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_Create', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_Delete', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_Index', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_ItemProps', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_Update', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemController_View', 2, NULL, NULL, NULL, 1432883981, 1432883981],
                ['star\\catalog\\controllers\\core\\ItemImgController_Create', 2, NULL, NULL, NULL, 1432883991, 1432883991],
                ['star\\catalog\\controllers\\core\\ItemImgController_Delete', 2, NULL, NULL, NULL, 1432883991, 1432883991],
                ['star\\catalog\\controllers\\core\\ItemImgController_Index', 2, NULL, NULL, NULL, 1432883991, 1432883991],
                ['star\\catalog\\controllers\\core\\ItemPropController_Create', 2, NULL, NULL, NULL, 1432884003, 1432884003],
                ['star\\catalog\\controllers\\core\\ItemPropController_Delete', 2, NULL, NULL, NULL, 1432884003, 1432884003],
                ['star\\catalog\\controllers\\core\\ItemPropController_Index', 2, NULL, NULL, NULL, 1432884003, 1432884003],
                ['star\\catalog\\controllers\\core\\ItemPropController_Update', 2, NULL, NULL, NULL, 1432884003, 1432884003],
                ['star\\catalog\\controllers\\core\\ItemPropController_View', 2, NULL, NULL, NULL, 1432884003, 1432884003],
                ['star\\marketing\\controllers\\core\\CouponController_Create', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_Delete', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_DeleteRule', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_Index', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_Update', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_View', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\marketing\\controllers\\core\\CouponController_ViewDetail', 2, NULL, NULL, NULL, 1436168916, 1436168916],
                ['star\\order\\controllers\\core\\OrderController_Create', 2, NULL, NULL, NULL, 1436168990, 1436168990],
                ['star\\order\\controllers\\core\\OrderController_Delete', 2, NULL, NULL, NULL, 1436168990, 1436168990],
                ['star\\order\\controllers\\core\\OrderController_Index', 2, NULL, NULL, NULL, 1436168990, 1436168990],
                ['star\\order\\controllers\\core\\OrderController_Update', 2, NULL, NULL, NULL, 1436168990, 1436168990],
                ['star\\order\\controllers\\core\\OrderController_View', 2, NULL, NULL, NULL, 1436168990, 1436168990],
                ['star\\payment\\controllers\\core\\PaymentController_Create', 2, NULL, NULL, NULL, 1436169004, 1436169004],
                ['star\\payment\\controllers\\core\\PaymentController_Delete', 2, NULL, NULL, NULL, 1436169004, 1436169004],
                ['star\\payment\\controllers\\core\\PaymentController_Index', 2, NULL, NULL, NULL, 1436169004, 1436169004],
                ['star\\payment\\controllers\\core\\PaymentController_Update', 2, NULL, NULL, NULL, 1436169004, 1436169004],
                ['star\\payment\\controllers\\core\\PaymentController_View', 2, NULL, NULL, NULL, 1436169004, 1436169004],
                ['star\\refund\\controllers\\core\\RefundController_Create', 2, NULL, NULL, NULL, 1436169017, 1436169017],
                ['star\\refund\\controllers\\core\\RefundController_Delete', 2, NULL, NULL, NULL, 1436169017, 1436169017],
                ['star\\refund\\controllers\\core\\RefundController_Index', 2, NULL, NULL, NULL, 1436169017, 1436169017],
                ['star\\refund\\controllers\\core\\RefundController_Update', 2, NULL, NULL, NULL, 1436169017, 1436169017],
                ['star\\refund\\controllers\\core\\RefundController_View', 2, NULL, NULL, NULL, 1436169017, 1436169017],
                ['star\\shipment\\controllers\\core\\ShipmentController_Create', 2, NULL, NULL, NULL, 1436169031, 1436169031],
                ['star\\shipment\\controllers\\core\\ShipmentController_Delete', 2, NULL, NULL, NULL, 1436169031, 1436169031],
                ['star\\shipment\\controllers\\core\\ShipmentController_Index', 2, NULL, NULL, NULL, 1436169031, 1436169031],
                ['star\\shipment\\controllers\\core\\ShipmentController_Update', 2, NULL, NULL, NULL, 1436169031, 1436169031],
                ['star\\shipment\\controllers\\core\\ShipmentController_View', 2, NULL, NULL, NULL, 1436169031, 1436169031],
                ['star\\system\\controllers\\core\\SettingController_Create', 2, NULL, NULL, NULL, 1436169055, 1436169055],
                ['star\\system\\controllers\\core\\SettingController_Delete', 2, NULL, NULL, NULL, 1436169055, 1436169055],
                ['star\\system\\controllers\\core\\SettingController_Index', 2, NULL, NULL, NULL, 1436169055, 1436169055],
                ['star\\system\\controllers\\core\\SettingController_Update', 2, NULL, NULL, NULL, 1436169055, 1436169055],
                ['star\\system\\controllers\\core\\SettingController_View', 2, NULL, NULL, NULL, 1436169055, 1436169055],
                ['star\\system\\controllers\\core\\StationController_Create', 2, NULL, NULL, NULL, 1436169068, 1436169068],
                ['star\\system\\controllers\\core\\StationController_Delete', 2, NULL, NULL, NULL, 1436169068, 1436169068],
                ['star\\system\\controllers\\core\\StationController_Index', 2, NULL, NULL, NULL, 1436169068, 1436169068],
                ['star\\system\\controllers\\core\\StationController_Update', 2, NULL, NULL, NULL, 1436169068, 1436169068],
                ['star\\system\\controllers\\core\\StationController_View', 2, NULL, NULL, NULL, 1436169068, 1436169068],
                ['star\\system\\controllers\\core\\SystemController_Index', 2, NULL, NULL, NULL, 1436169078, 1436169078],
                ['star\\system\\controllers\\core\\SystemController_Update', 2, NULL, NULL, NULL, 1436169078, 1436169078],
                ['star\\system\\controllers\\core\\TreeController_Index', 2, NULL, NULL, NULL, 1436169114, 1436169114],
            ]);
        $this->batchInsert('{{%auth_item_child}}', ['parent', 'child'],
            [
                ['Merchant', 'star\\account\\controllers\\core\\AccountController_Delete'],
                ['Merchant', 'star\\account\\controllers\\core\\AccountController_Update'],
                ['Merchant', 'star\\account\\controllers\\core\\AccountController_View'],
                ['Merchant', 'star\\account\\controllers\\core\\AccountController_WithdrawalIndex'],
                ['Merchant', 'star\\account\\controllers\\core\\ActivityController_Create'],
                ['Merchant', 'star\\account\\controllers\\core\\ActivityController_Delete'],
                ['Merchant', 'star\\account\\controllers\\core\\ActivityController_Index'],
                ['Merchant', 'star\\account\\controllers\\core\\ActivityController_Update'],
                ['Merchant', 'star\\account\\controllers\\core\\ActivityController_View'],
                ['Merchant', 'star\\account\\controllers\\core\\RechargeController_Create'],
                ['Merchant', 'star\\account\\controllers\\core\\RechargeController_Delete'],
                ['Merchant', 'star\\account\\controllers\\core\\RechargeController_Index'],
                ['Merchant', 'star\\account\\controllers\\core\\RechargeController_Update'],
                ['Merchant', 'star\\account\\controllers\\core\\RechargeController_View'],
                ['Merchant', 'star\\auth\\controllers\\AuthController_Create'],
                ['Merchant', 'star\\auth\\controllers\\AuthController_ListRole'],
                ['Merchant', 'star\\auth\\controllers\\AuthController_Update'],
                ['Merchant', 'star\\blog\\controllers\\core\\CommentController_Create'],
                ['Merchant', 'star\\blog\\controllers\\core\\CommentController_Delete'],
                ['Merchant', 'star\\blog\\controllers\\core\\CommentController_Index'],
                ['Merchant', 'star\\blog\\controllers\\core\\CommentController_Update'],
                ['Merchant', 'star\\blog\\controllers\\core\\CommentController_View'],
                ['Merchant', 'star\\blog\\controllers\\core\\PostController_Create'],
                ['Merchant', 'star\\blog\\controllers\\core\\PostController_Delete'],
                ['Merchant', 'star\\blog\\controllers\\core\\PostController_Index'],
                ['Merchant', 'star\\blog\\controllers\\core\\PostController_Update'],
                ['Merchant', 'star\\blog\\controllers\\core\\PostController_View'],
                ['Merchant', 'star\\catalog\\controllers\\core\\DefaultController_Index'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_AjaxSkus'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_Bulk'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_Create'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_Delete'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_Index'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_ItemProps'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_Update'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemController_View'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemImgController_Create'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemImgController_Delete'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemImgController_Index'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemPropController_Create'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemPropController_Delete'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemPropController_Index'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemPropController_Update'],
                ['Merchant', 'star\\catalog\\controllers\\core\\ItemPropController_View'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_Create'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_Delete'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_DeleteRule'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_Index'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_Update'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_View'],
                ['Merchant', 'star\\marketing\\controllers\\core\\CouponController_ViewDetail'],
                ['Merchant', 'star\\order\\controllers\\core\\OrderController_Create'],
                ['Merchant', 'star\\order\\controllers\\core\\OrderController_Delete'],
                ['Merchant', 'star\\order\\controllers\\core\\OrderController_Index'],
                ['Merchant', 'star\\order\\controllers\\core\\OrderController_Update'],
                ['Merchant', 'star\\order\\controllers\\core\\OrderController_View'],
                ['Merchant', 'star\\payment\\controllers\\core\\PaymentController_Create'],
                ['Merchant', 'star\\payment\\controllers\\core\\PaymentController_Delete'],
                ['Merchant', 'star\\payment\\controllers\\core\\PaymentController_Index'],
                ['Merchant', 'star\\payment\\controllers\\core\\PaymentController_Update'],
                ['Merchant', 'star\\payment\\controllers\\core\\PaymentController_View'],
                ['Merchant', 'star\\refund\\controllers\\core\\RefundController_Create'],
                ['Merchant', 'star\\refund\\controllers\\core\\RefundController_Delete'],
                ['Merchant', 'star\\refund\\controllers\\core\\RefundController_Index'],
                ['Merchant', 'star\\refund\\controllers\\core\\RefundController_Update'],
                ['Merchant', 'star\\refund\\controllers\\core\\RefundController_View'],
                ['Merchant', 'star\\shipment\\controllers\\core\\ShipmentController_Create'],
                ['Merchant', 'star\\shipment\\controllers\\core\\ShipmentController_Delete'],
                ['Merchant', 'star\\shipment\\controllers\\core\\ShipmentController_Index'],
                ['Merchant', 'star\\shipment\\controllers\\core\\ShipmentController_Update'],
                ['Merchant', 'star\\shipment\\controllers\\core\\ShipmentController_View'],
                ['Merchant', 'star\\system\\controllers\\core\\SettingController_Create'],
                ['Merchant', 'star\\system\\controllers\\core\\SettingController_Delete'],
                ['Merchant', 'star\\system\\controllers\\core\\SettingController_Index'],
                ['Merchant', 'star\\system\\controllers\\core\\SettingController_Update'],
                ['Merchant', 'star\\system\\controllers\\core\\SettingController_View'],
                ['Merchant', 'star\\system\\controllers\\core\\StationController_Create'],
                ['Merchant', 'star\\system\\controllers\\core\\StationController_Delete'],
                ['Merchant', 'star\\system\\controllers\\core\\StationController_Index'],
                ['Merchant', 'star\\system\\controllers\\core\\StationController_Update'],
                ['Merchant', 'star\\system\\controllers\\core\\StationController_View'],
                ['Merchant', 'star\\system\\controllers\\core\\SystemController_Index'],
                ['Merchant', 'star\\system\\controllers\\core\\SystemController_Update'],
                ['Merchant', 'star\\system\\controllers\\core\\TreeController_Index'],

            ]);
        $this->batchInsert('{{%auth_assignment}}', ['item_name', 'user_id', 'created_at'],
            [
                    ['Administrator',1,1436169982]
            ]);
    }

    public function down()
    {
        echo "m150624_084848_auth_v0_1_0 cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp[)
    {
    }
    
    public function safeDown[)
    {
    }
    */
}
