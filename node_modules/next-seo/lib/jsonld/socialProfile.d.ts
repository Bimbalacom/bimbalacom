import { FC } from 'react';
export interface SocialProfileJsonLdProps {
    type: string;
    name: string;
    url: string;
    sameAs: string[];
}
declare const SocialProfileJsonLd: FC<SocialProfileJsonLdProps>;
export default SocialProfileJsonLd;
