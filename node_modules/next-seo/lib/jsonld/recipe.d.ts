import { FC } from 'react';
declare type AggregateRating = {
    ratingValue: string;
    ratingCount: string;
};
declare type Instruction = {
    name: string;
    text: string;
    url?: string;
    image?: string;
};
declare type Video = {
    name: string;
    description: string;
    contentUrl: string;
    uploadDate: string;
    duration: string;
    thumbnailUrls?: string[];
    embedUrl?: string;
    expires?: string;
    watchCount?: number;
};
export interface RecipeJsonLdProps {
    name: string;
    description: string;
    authorName: string;
    ingredients: string[];
    instructions: Instruction[];
    images?: string[];
    datePublished?: string;
    prepTime?: string;
    cookTime?: string;
    totalTime?: string;
    keywords?: string;
    yields?: string;
    category?: string;
    cuisine?: string;
    calories?: number;
    aggregateRating?: AggregateRating;
    video?: Video;
}
declare const RecipeJsonLd: FC<RecipeJsonLdProps>;
export default RecipeJsonLd;
