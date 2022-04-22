import {httpRequest, httpRequestUrlApp} from "../api/index.js";
import {countColumnTable, loadingTable} from "../api/module.js";

const params = new URLSearchParams(window.location.search);
const bodyTable = document.querySelector('#body-table');
const footerTable = document.querySelector('#foot-pagination');
const tableData = document.querySelector('#table-data');
let sessionKey = params.get('sessionKey');
let path = params.has('page') ? 'user-participant/session/list?sessionKey='+sessionKey+'&page=' + params.get('page') : 'user-participant/session/list?sessionKey='+sessionKey+'&page=1';
let totalColumn = countColumnTable(tableData);
getDataUser(path);
function getDataUser(path) {
    bodyTable.innerHTML = loadingTable(totalColumn);

    httpRequest(path, 'GET', {}, function (data) {
        let page = params.get('page');
        let userParticipantList = data.data;
        let userParticipantListHtml = '';
        let pagination = '';

        let numbering = page != null ? (page - 1) * 10 : 0;
        for (let i = 0; i < userParticipantList.data.length; i++) {
            userParticipantListHtml += `
                <tr>
                    <td>${(i+1) + numbering}</td>
                    <td>${userParticipantList.data[i].number_of_register}</td>
                    <td>${userParticipantList.data[i].session_name}</td>
                    <td>${userParticipantList.data[i].full_name}</td>
                    <td>${userParticipantList.data[i].phone_number}</td>
                    <td>${userParticipantList.data[i].date_register}</td>
                    <td class="text-left">${userParticipantList.data[i].totalReward}</td>
                </tr>`;
        }

        if (userParticipantList.total > 0) {
            pagination += `<tr>
                    <td colspan="2">Menampilkan ${userParticipantList.to} data dari ${userParticipantList.total} </td>
                    <td colspan="6" class="footable-visible">
                        <ul class="pagination float-right">
                            <li class="footable-page-arrow disabled"><a data-page="first" href="${splitUrlPagination(userParticipantList.first_page_url)}">«</a></li>
                            <li class="footable-page-arrow ${userParticipantList.links[0].url == null ? 'disabled': ''}"><a data-page="prev" href="${splitUrlPagination(userParticipantList.links[0].url)}">‹</a></li>`;
            for (let i = 0; i < userParticipantList.links.length; i++) {
                if (userParticipantList.links[i].label === "pagination.previous" || userParticipantList.links[i].label === "pagination.next") {
                    continue;
                }
                pagination += `
                            <li class="footable-page ${userParticipantList.links[i].active ? 'active': ''}">
                            <a data-page="${i}" href="${splitUrlPagination(userParticipantList.links[i].url)}">${userParticipantList.links[i].label}</a>
                            </li>`;
            }
            pagination += `<li class="footable-page-arrow"><a data-page="next" href="${splitUrlPagination(userParticipantList.next_page_url)}">›</a></li>
                            <li class="footable-page-arrow"><a data-page="last" href="${splitUrlPagination(userParticipantList.last_page_url)}">»</a></li>
                        </ul>
                    </td>
                </tr>`;
        }

        bodyTable.innerHTML = userParticipantListHtml;
        footerTable.innerHTML = pagination;
    });
}

function splitUrlPagination(url) {
    if (url == null) {
        return '';
    }
    let urlSplit = url.split('/');
    let splitPage = urlSplit[urlSplit.length - 1].split('?');
    return `?${splitPage[1]}&sessionKey=${sessionKey}`;
}