import axios from 'axios'

const { MAILCHIMP_SECRET: secret } = process.env
const MAILCHIMP_MERGE_FIELDS = {name: 'NAME', company_name: 'CNAME', company_size: 'CSIZE'};
export default async (req, res) => {
    const {emailAddress, ...demoData} = req.body;
    if(typeof emailAddress === undefined){
        res.statusCode = 422;
        res.end();
        return;
    }
    let data = {email_address: emailAddress, status: 'subscribed'};
    if(Object.keys(demoData).length !== 0 && demoData.constructor === Object){
        data.status = 'unsubscribed';
        data.tags = ['Demo request'];
        data.merge_fields = {};
        for (const key in demoData){
            if(typeof demoData[key] !== undefined){
                data.merge_fields[MAILCHIMP_MERGE_FIELDS[key.toLowerCase()]] = demoData[key];
            }
        }
    }
    try {
        const response = await axios({
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': secret,
            },
            url: 'https://us17.api.mailchimp.com/3.0/lists/e974cbc9ee/members',
            data: data
        })
        res.statusCode = (response.status === 200) ? 200 : 400;

    } catch(e) {
        res.statusCode = 500;
        console.log("Exception: "+e);
    }
    res.end();
}