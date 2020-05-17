import React, {useState, useEffect} from 'react';
import ReactHtmlParser from 'react-html-parser';
import {fetchDetailNews} from "../../../api/getNews";

const NewsDetail = ({match, location}) => {
    const [data, setData] = useState(null);
    const {params: {idNews}} = match;
    useEffect(() => {
        const detail = fetchDetailNews(idNews);
        detail.then(data => {
            setData(data);
        });
    }, []);
    console.log(data);
    if(!data)  return  (<>Загрузка</>);

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


export default NewsDetail;
