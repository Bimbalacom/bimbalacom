import axios from 'axios'

const { MAILCHIMP_SECRET: secret } = process.env

export default async (req, res) => {
    const email = req.body.emailAddress
    try {
        const response = await axios({
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': secret,
            },
            url: 'https://us17.api.mailchimp.com/3.0/lists/e974cbc9ee/members',
            data: {
                email_address: email,
                status: 'subscribed'
            }
        })
        res.statusCode = (response.status === 200) ? 200 : 400;

    } catch(e) {
        res.statusCode = 500;
        console.log("Exception: "+e);
    }
    res.end();
}