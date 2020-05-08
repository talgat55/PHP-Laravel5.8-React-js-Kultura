import ContentLoader from "react-content-loader";
import React from 'react';


const AfishaBlockContentLoader = () => {
    return (
        <ContentLoader
            speed={1}
            primaryColor={'#f3f3f3'}
            secondaryColor={'#ecebeb'}
        >
            <rect x="0" y="0" rx="0" ry="0" width="265" height="250"/>
            {/*<rect x="320" y="0" rx="0" ry="0" width="300" height="200"/>*/}
            {/*<rect x="640" y="0" rx="0" ry="0" width="300" height="200"/>*/}
        </ContentLoader>
    );

};


export default AfishaBlockContentLoader;
