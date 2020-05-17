import React, {useState, useEffect} from 'react';
import ReactHtmlParser from 'react-html-parser';
import {fetchDetailAfisha} from "../../../api/getAfisha";

const AfishaDetail = ({match, location}) => {
    const [data, setData] = useState(null);
    const {params: {idAfisha}} = match;

    useEffect(() => {
        const detail = fetchDetailAfisha(idAfisha);
        detail.then(data => {
            setData(data);
        });
    }, []);

    if (!data) return (<>Загрузка</>);
    console.log(data)
    return (
        <div className="container  mb-5 mt-5">
            <div className="row">
                <h1>
                    {data[0].name}
                </h1>
            </div>
            <div className="row">
                <div className="col-12 col-lg-7">
                    <div className="img-block">
                        <img src={data[0].image}  alt="Изображение" />
                    </div>
                </div>
                <div className="col-12 col-lg-5">

                </div>

                <div className="description">
                    {ReactHtmlParser(data[0].text)}
                </div>
            </div>
        </div>
    )
};

export default AfishaDetail;
