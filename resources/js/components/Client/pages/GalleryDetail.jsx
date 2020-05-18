import React, {useState, useEffect} from 'react';
import ReactHtmlParser from 'react-html-parser';
import styled from 'styled-components'
import {fetchGalleryDetailPage} from "../../../api/getGallery";

const GalleryDetail = ({match, location}) => {
    const [data, setData] = useState(null);
    const {params: {idGallery}} = match;
    useEffect(() => {
        const detail = fetchGalleryDetailPage(idGallery);
        detail.then(data => {
            setData(data);
        });
    }, []);

    if(!data)  return  (<>Загрузка</>);
    const arrImages = JSON.parse(data[0].images);
    return (
        <GalleryDetailComponent className="container  mb-5 mt-5">
            <div className="row">
                <h1>
                    {data[0].name}
                </h1>
            </div>
            <div className="row">
                <div className="description">
                    {ReactHtmlParser(data[0].description)}
                </div>
            </div>
            <div className="row">
                {arrImages.map( (item,index) =>(
                    <div  key={index} className="col-12 col-lg-3">
                        <img className="image" src={item}  alt="изображение" />
                    </div>
                ))}
            </div>
        </GalleryDetailComponent>
    )
};

const GalleryDetailComponent = styled.div`
    .image{
        max-width: 100%;
    }

`;
export default GalleryDetail;
