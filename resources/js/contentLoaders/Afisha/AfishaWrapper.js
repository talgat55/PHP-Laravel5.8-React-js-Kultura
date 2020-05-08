import React from 'react';
import AfishaBlock from './AfishaBlock';

const AfishaContentLoaderWrap = () => {
    const LIST = [
        { key: 0},
        { key: 1},
        { key: 2},
        { key: 3},
    ];
    return (
        <div className="container">
            <div className="row">
                {
                    LIST.map(item => (
                        <div className="item col-12 col-md-6 col-lg-3" key={item.key}  >
                            <AfishaBlock/>
                        </div>
                    ))
                }
            </div>
        </div>
    );
};

export default AfishaContentLoaderWrap;
