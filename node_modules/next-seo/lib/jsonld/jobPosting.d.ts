import { FC } from 'react';
export interface HiringOrganization {
    name: string;
    sameAs: string;
}
export interface Place {
    addressLocality: string;
    addressRegion: string;
    postalCode: string;
    streetAddress: string;
    addressCountry: string;
}
export interface MonetaryAmount {
    currency: string;
    value: number;
    unitText: UnitTextType;
}
export declare type UnitTextType = 'HOUR' | 'DAY' | 'WEEK' | 'MONTH' | 'YEAR';
export declare type EmploymentType = 'FULL_TIME' | 'PART_TIME' | 'CONTRACTOR' | 'TEMPORARY' | 'INTERN' | 'VOLUNTEER' | 'PER_DIEM' | 'OTHER';
export interface JobPostingJsonLdProps {
    datePosted: string;
    description: string;
    hiringOrganization: HiringOrganization;
    jobLocation: Place;
    title: string;
    validThrough: string;
    applicantLocationRequirements?: string;
    baseSalary?: MonetaryAmount;
    employmentType?: EmploymentType | EmploymentType[];
    jobLocationType?: string;
}
declare const JobPostingJsonLd: FC<JobPostingJsonLdProps>;
export default JobPostingJsonLd;
