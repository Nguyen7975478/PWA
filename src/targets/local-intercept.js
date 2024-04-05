const { Targetables } = require('@magento/pwa-buildpack');

module.exports = targets => {

    console.log("_____________");
    const targetables = Targetables.using(targets);
    const ProductDetails = targetables.reactComponent(
        '@magento/venia-ui/lib/components/ProductFullDetail/productFullDetail.js'
    );
    const Productreview = ProductDetails.addImport(
        "Reviews from 'src/components/reviews/review.js'"
    );
    ProductDetails
        .insertAfterJSX('<Form />', `<${Productreview} />`)
        .setJSXProps('Reviews', {
            'classes': '{classes}',
            'productDetails': '{productDetails}',
        });

};
