import React from 'react';
import {connect} from 'react-redux';
import styled from 'styled-components';
import iconFb from '../../../../static/facebook.png';
import iconVK from '../../../../static/vk.png';
import iconInst from '../../../../static/instagram.png';
import iconTelegram from '../../../../static/telegram.png';

const SocLinks = (props) => {

    const {
        soc_link_vk: linkVK,
        soc_link_fb: linkFb,
        soc_link_inst: linkInst,
        soc_link_telegram: linkTG,

    } = props.data;
    const linksSoc = [
        {
            id: '1',
            link: linkFb,
            url: iconFb
        },
        {
            id: '2',
            link: linkVK,
            url: iconVK
        },
        {
            id: '3',
            link: linkTG,
            url: iconTelegram
        },
        {
            id: '4',
            link: linkInst,
            url: iconInst
        }
    ];
    return (
        <SocLinksComponent className="link-to-social">
            {
                linksSoc.map(item => (
                    <li key={item.id}>
                        <a target="_blank" href={item.link}>
                            <img src={item.url} alt="Иконка"/>
                        </a>
                    </li>
                ))
            }

        </SocLinksComponent>
    )
};

const SocLinksComponent = styled.ul`
  margin: 0;
  padding: 0;
  display: flex;
  li{
    list-style: none; 
  }

`;

const mapStateToProps = state => {
    return {
        data: state.settings.data
    };
};
export default connect(mapStateToProps, null)(SocLinks);


