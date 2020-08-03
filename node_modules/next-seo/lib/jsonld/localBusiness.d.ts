import { FC } from 'react';
import { Address } from '../types';
declare type Geo = {
    latitude: string;
    longitude: string;
};
declare type Rating = {
    ratingValue: string;
    ratingCount: string;
};
declare type OpeningHoursSpecification = {
    opens: string;
    closes: string;
    dayOfWeek: string | string[];
    validFrom?: string;
    validThrough?: string;
};
export interface LocalBusinessJsonLdProps {
    type: string;
    id: string;
    name: string;
    description: string;
    url?: string;
    telephone?: string;
    address: Address;
    geo?: Geo;
    images: string[];
    rating?: Rating;
    priceRange?: string;
    sameAs?: string[];
    openingHours?: OpeningHoursSpecification | OpeningHoursSpecification[];
}
declare const LocalBusinessJsonLd: FC<LocalBusinessJsonLdProps>;
export default LocalBusinessJsonLd;
