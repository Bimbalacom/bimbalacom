import { FC } from 'react';
import { Address } from '../types';
declare type Location = {
    name: string;
    address: Address;
    sameAs?: string;
};
export interface EventJsonLdProps {
    name: string;
    startDate: string;
    endDate: string;
    location: Location;
    url?: string;
    description?: string;
    images?: string[];
}
declare const EventJsonLd: FC<EventJsonLdProps>;
export default EventJsonLd;
