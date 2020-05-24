import React, {useEffect, useState} from 'react';
import ReactHtmlParser from "react-html-parser";
import {fetchCultureDetailsPageBySlug} from "../../../api/getCultureDetails";
const CulturePageDetail = ({match, location}) => {
    const [data, setData] = useState(null);
    const {params: {idCulture}} = match;

    useEffect(() => {
        const detail = fetchCultureDetailsPageBySlug(idCulture);
        detail.then(data => {
            setData(data);
        });
    }, []);

    if (!data) return (<>Загрузка</>);

    return (
        <div className="container  mb-5 mt-5">
            <div className="row">
                <h1>
                    {data[0].name}
                </h1>
            </div>
            <div className="row">
                <div className="col-12 col-lg-12">
                    <div className="img-block">
                        <img src={data[0].image}  alt="Изображение" />
                    </div>
                </div>
                <div className="description">
                    {ReactHtmlParser(data[0].text)}
                </div>
            </div>
        </div>
    )
};
export default CulturePageDetail;
