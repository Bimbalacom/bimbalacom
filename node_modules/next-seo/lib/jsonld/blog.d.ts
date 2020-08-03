import { FC } from 'react';
export interface BlogJsonLdProps {
    url: string;
    title: string;
    images: ReadonlyArray<string>;
    datePublished: string;
    dateModified: string;
    authorName: string;
    description: string;
}
declare const BlogJsonLd: FC<BlogJsonLdProps>;
export default BlogJsonLd;
