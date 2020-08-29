import Link from "next/link";
import React from "react";
import pagination from "pagination";

export default function blog(){
    return (
    <Flex
        as="ul"
        pl={0}
        ml={0}
        sx={{
          listStyle: "none",
          "li:not(:first-of-type)": { marginLeft: "1em" }
        }}
      >
        {previous && (
          <li>
            <Link href={`/blog/${previous}`}>Previous</Link>
          </li>
        )}
        {range.map((page, index) => (
          <li key={index}>
            <Link key={index} href={`/blog/${page}`}>
              {page}
            </Link>
          </li>
        ))}
        {next && (
          <li>
            <Link href={`/blog/${next}`}>Next</Link>
          </li>
        )}
      </Flex> 
    )
}