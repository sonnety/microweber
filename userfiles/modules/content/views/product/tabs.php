<?php
if ($data['id'] > 0) {
    $product = \MicroweberPackages\Product\Product::find($data['id']);
    $contentData = $product->getContentData();
} else {
    $contentData = \MicroweberPackages\Product\Product::$contentDataDefault;
}
?>

<?php include_once 'pricing.php'; ?>
<?php include_once 'inventory.php'; ?>
<?php include_once 'shipping.php'; ?>
<?php include_once 'variants.php'; ?>