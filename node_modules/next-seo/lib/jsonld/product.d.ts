import { FC } from 'react';
declare type ReviewRating = {
    bestRating?: string;
    ratingValue: string;
    worstRating?: string;
};
declare type Author = {
    type: string;
    name: string;
};
declare type Publisher = {
    type: string;
    name: string;
};
declare type Review = {
    author: Author;
    datePublished?: string;
    reviewBody?: string;
    name?: string;
    publisher?: Publisher;
    reviewRating: ReviewRating;
};
declare type Offers = {
    price: string;
    priceCurrency: string;
    priceValidUntil?: string;
    itemCondition?: string;
    availability?: string;
    url?: string;
    seller: {
        name: string;
    };
};
declare type AggregateRating = {
    ratingValue: string;
    reviewCount: string;
};
export interface ProductJsonLdProps {
    productName: string;
    images?: string[];
    description?: string;
    brand?: string;
    reviews?: Review[];
    aggregateRating?: AggregateRating;
    offers: Offers | Offers[];
    sku?: string;
    gtin8?: string;
    gtin13?: string;
    gtin14?: string;
    mpn?: string;
}
declare const ProductJsonLd: FC<ProductJsonLdProps>;
export default ProductJsonLd;
