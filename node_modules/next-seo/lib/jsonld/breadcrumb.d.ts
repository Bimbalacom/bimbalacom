import { FC } from 'react';
export interface ItemListElements {
    item: string;
    name: string;
    position: number;
}
export interface BreadCrumbJsonLdProps {
    itemListElements: ItemListElements[];
}
declare const BreadCrumbJsonLd: FC<BreadCrumbJsonLdProps>;
export default BreadCrumbJsonLd;
