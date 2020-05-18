import React from 'react';
import PropTypes from "prop-types";
import styled from "styled-components";
import Title from "../Title/Title";
import Item from "./Item";
const GalleryPage = ({data}) => {

    return (
        <GalleryPageComponent>
            <div className="container">
                <div className="row">
                    <Title
                        title="Галерея"
                    />
                </div>
                <div className="row">
                    <ul className="gallery-list row">
                        {
                            data.map((item, index) => (
                                <Item
                                    key={index}
                                    name={item.name}
                                    image={item.images}
                                    slug={item.slug}
                                />
                            ))
                        }
                    </ul>
                </div>
            </div>
        </GalleryPageComponent>
    )
};
GalleryPage.propTypes = {
    data: PropTypes.object.isRequired
};

const GalleryPageComponent = styled.section`
  margin: 40px 0;
  .gallery-list{
    margin: 0;
    padding: 0;
    li{
      list-style: none;
    }
  }
`;
export default GalleryPage;
